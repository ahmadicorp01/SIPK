<!DOCTYPE html>
<html>
<head>
  <title>Laporan SIPUHH 2019</title>
  <link rel="icon" href="<?php echo base_urL('assets/img/icon.png');?>" type="image/ico">
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #39b42e;
      width:700px;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
  
    .page {
    page-break-after:always;
    position: relative;
    }

    .normal{
      width: 215px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
  <style>

#show {
            display: block;
        }
        #hidden {
            display: none;
        }
        @media print{
            @page {
                /size: 330mm 215mm;/
                size: 'Legal';
                size: portrait;
                margin: 30px;
            }
            p {
                line-height: 1.7em;
                margin: 0;
            }
            #show {
                display: none;
            }
            #hidden {
                display: block;
            }
        }
</style>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">

</head>
<body  onload="setTimeout(cetak, 1000)">
  <div id="show">Printing...</div>
<div id="hidden">
<center><div>

    <tr>
     <!-- ini dibawah kodingan dari gambar image maaf banyak -->
    <th><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgEASABIAAD/4Q3PRXhpZgAATU0AKgAAAAgABwESAAMAAAABAAEAAAEaAAUAAAABAAAAYgEbAAUAAAABAAAAagEoAAMAAAABAAIAAAExAAIAAAAcAAAAcgEyAAIAAAAUAAAAjodpAAQAAAABAAAApAAAANAACvyAAAAnEAAK/IAAACcQQWRvYmUgUGhvdG9zaG9wIENTMyBXaW5kb3dzADIwMTc6MDE6MTkgMDA6Mjk6NDIAAAAAA6ABAAMAAAAB//8AAKACAAQAAAABAAABhqADAAQAAAABAAAAjAAAAAAAAAAGAQMAAwAAAAEABgAAARoABQAAAAEAAAEeARsABQAAAAEAAAEmASgAAwAAAAEAAgAAAgEABAAAAAEAAAEuAgIABAAAAAEAAAyZAAAAAAAAAEgAAAABAAAASAAAAAH/2P/gABBKRklGAAECAABIAEgAAP/tAAxBZG9iZV9DTQAC/+4ADkFkb2JlAGSAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBEMDAwMDAwRDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAENCwsNDg0QDg4QFA4ODhQUDg4ODhQRDAwMDAwREQwMDAwMDBEMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM/8AAEQgAOQCgAwEiAAIRAQMRAf/dAAQACv/EAT8AAAEFAQEBAQEBAAAAAAAAAAMAAQIEBQYHCAkKCwEAAQUBAQEBAQEAAAAAAAAAAQACAwQFBgcICQoLEAABBAEDAgQCBQcGCAUDDDMBAAIRAwQhEjEFQVFhEyJxgTIGFJGhsUIjJBVSwWIzNHKC0UMHJZJT8OHxY3M1FqKygyZEk1RkRcKjdDYX0lXiZfKzhMPTdePzRieUpIW0lcTU5PSltcXV5fVWZnaGlqa2xtbm9jdHV2d3h5ent8fX5/cRAAICAQIEBAMEBQYHBwYFNQEAAhEDITESBEFRYXEiEwUygZEUobFCI8FS0fAzJGLhcoKSQ1MVY3M08SUGFqKygwcmNcLSRJNUoxdkRVU2dGXi8rOEw9N14/NGlKSFtJXE1OT0pbXF1eX1VmZ2hpamtsbW5vYnN0dXZ3eHl6e3x//aAAwDAQACEQMRAD8A9VSSVLJFmTltw2vdXSxgtvLCWvduJZTU2xvvYz9Ha6zZ7/ofy0got1JUL8LpGNSbr6q2VsGrnD/Vz3uWJk9X6dU6a+lj0+z7v0U/2fTsTMmbFj+eVfS/+igmt3qklzGL1noNhDcrCGNP58B7Pm5g3t/7bW03p3TLqw+hjWtcJZdQ4tP9ZltRCOPLjyawlf8ALsoG26kq2DZc5llV53247zW6yAN4htldhDfbvdVYz1dv+FVlOSpJJJJSkkkklKSSSSUpJJJJSkkkklKSSSSU/wD/0PVVUYY6reTx9np/6vIVtZ9zXPzcxjPpOxKw34l2TCXQ+SD0cbG6rdlu6l1j6TcNgbg0una0O3bnljf8Nc0M/Sf4P+bVM/XTqLWmvMqoxLHisNFoGwOLv1nHe+7JxfUeyi/E2ba/fXkfbf0lP6FA6VdHSuq4zYD7sUPYS3ft2g1vf6W6ve6v1a3sZvWDn5FNVeNk432Wq805Njsi+51Ze+71vU+0Vvspy2faMVtlHTLd/r0+pbiWen9msUHKy4sQkdSSeLztUdnpMOqvrNGXkvqq6dZj7TW+oO9K0OE73V/y3tfX+g/Sez1P0/q1ofR35jM/FxWutqosva+yqHNaS0Of4eXv/wBJ/hFSbg39T+r/AF2rKssc7pjt1FztN/2Zltv6Wu1vr1WXOusy7KH/AKKn7XR9m/Q/ol3vS735PTMTIsEWXUV2PAEQXMa92nzTZ8vGWUSj6Konh/TXnEOCOQH9IxMaXxf5/M/44f8AnmhVuvdVd0nEryiwmk2tZkXBjrBTWQ5zsh9NUWPZuayr+R6vq/memrOL/P5n/HD/AM80KWTjvuNTmXPpdS/eNkQ72uZ6dzXB2+r37/zH7/8ACK7jMROJmLj1H0/wmM3RpyT9Y66/sN1mTjuw8luVc66ptlgfVjtdaHUvr3Npsrrb+s1Xfy6af0iOfrBU7N6fi00ve3qAse24wGhlbG3b2nd+m3erV7q/0f8Awnq1+khV/VbEptx7se6yh+O/JtBYGQbMsbLrNj2PYz0v+09bGen/AKX1ksb6qYGLdj3UPfV9mtvtbUwNFUZIa2+hlLmu9Gj9G3ayr/hP31Zl9z6GXyz6fpfrfa+X/qKwe7+I+z08X/dJXfWbpLcV+WXv9FjabCQxxJqyHGnFyGMje+m6xrvo+/8AkKeP9Yum5GUzFYbBdZdbjgOrc0C6lvq2UveW7Gv9H9NX++xVx9VscdId0gZNv2cmr03bat7GUvbdTVvFTfU2uZt33ep+j/7cUqfq1TTmNy25Fhe3Mtz9pDI33V/ZrK/obvSbV/N/4T/hE0x5Op1KV3Lg/wAT9Vxej/OfMm8ljQV1ZWdYuq+sLumPY37MzDOc60BzrID/AEDUK2zu936Tc3/ivS/PQ8z62dNq6Xk5+JuyTjUV5IqLX1b67ztx7Wuurbupe4O3WV79mxGv6Lbb1mzqrcgNL8R2EKjXIDS71fU3+o3c/wBX/wAD/wC3Fn2/U51uDZhOzYbZg4/T94q1DMZzrGW62/zlm925OgOTPAZyqhj4gOLhPq/XcXp/c/cQfc9VDvX/AHLqUdYx22sw8y2tmaXipza95ZveH3Y9RssYz077sZnrfZ3+/wD4z9G+wbfrP0R1Jvbe41NLQ5/o2gAusOI1jv0Xtf8AaG+ns/74h2fVum3O+1WXEsdk1Z1lIbAORTX9nrcx87mUe2uz0ff+kr/ntnsUG/VyxvRWdK+1A7MkZPrenqYv/aHp+n6n+m9u7d/NJvDyh4SZysmHGBpGAlfvcPol8n6Kbya6DrX/AHLbo+sPSMi9mPVf+lsdaxrXMez30f0ip5tYxtd1Tff6Vn6T0/0n82nr6/0mxpczIBA9CPa4bvtR24Rqlv6VuS7+bdWqNH1XfTnVZYzDNWXlZgaKwNctvpOr3F7v5nduY7ao0/VJjKMim69uS3Lox6MgW1NLbDQbHerb7t7rb/W91nq+qy79LXYiYcn0yS2j5/znr/yf+Z/56gcnWI6/l/3zpYnUm5WffjM27aaqbWgixtkXeprbXdVWxrf0ft2WPs/nfW9JXlldK6I7puS677Q69rsajFh7fefs+/Za+7d732etZv8AZ/o1qqvmGMT/AFZuFR1/rcPr/wCcvjda7v8A/9H1VVK/+Vb/APwvT/1eQrap5LbqcluZUw3MLPTvqbG/aDvrtr3Rv9LdZvq/PZZ+j/SV+laQgvJZ1VvR+suNbRta42VNIlrqrNwdXt/O2y+pWMDrXU8NuzquAeqYtpc7H6lgVNeXtcTLcjDbtfU+v1HU2e3/AIH9N/P27XU6em9UZWL25LTU7c1zKLmug/zlf8z9CxVsnp2HbkU2Y778OqittfpVY1vvDLWZTG3OdW5rmMez2ba/W/S2/p/0tlSrYsE8c50axk8UR4rscxHiBjGcZd/mj/dkmNtfXMK3GbRdhYlzRXdbc1tTn1GfUppq3es1tjPUr9Syuv6f6BbDTWAGNLQBoGiNI/Nj+yuWd9X8MUtoqysxlZoFVxOPa977GsyKWZW99Xsd+uWWW1/Q/RY/o+hXXZ6xqOk4uLnVZtVude+qxz66DXbDt3239HZZkBlb/wDlH+kZVu/9Wq/TfzisCJVKYOg0iNQHcxf5/M/44f8AnmhZubi9Tu64bKH2141ePW9pD3Ct91dlj3Y+3fsZ69bqmZFj8a79D/N7LlpYNN1db7L4F97zZY1plrSQGMra7Td6dTK2bvz/AKasqSGQwJIANjh1WGNjXvbgV5X1nFmJ6lILbG1nJAY2GF1rG3Vlxta7dTjuud7PVr/RVfTUKcn60uLbb8d7GsbfFLG07nuLMZ+J6oN7m+1785n6O/0/0f6Tf/heiSUn3kf5nH/io9v+tL7XApyfrU51AsoazewC1xa1zWv25zXuc1l2/Z61fSn/AKN3+Gu/6wHMu+s2TjWUHGspL8Q++pzGuGSPSdX6FzLmWbP5/d6lVH/pXpUkhzIEuIYcYrbQ/wDfKOOxXFJwTm/WUWVxiF1e2/1DtZrtOV9j2Ndkt/TWejhb2O/Q/rP85/3GjRl/Wj18cXYwFZcG3jazRvrX1mwvF/0vsf2W/wBjf5z/ALZXQJJfeBR/U4/sP9bx/rK4P60nmcvG607q1j6hkfZT1DFe3a9wb6DatuXt/TN24/2j+eo9L9N/wqIcn60241gfjbC42s2ja23a6hj8e1rqr7Kv0eZ61Tmetv2el+m/R/rHRJI/etIg44HhAiCR+6OG1e3v6jq81fR1t/RuoNY3IblWZNT8ZosIeGbcT1/Ss9bdXVvbl+z12fn/AOkUGO+s+K7Lfj1PtD8q91Ysh/6P9XOL6Lbcgejj+3L/AEX/AIHWuoSSHNkCjjhIE3Uh4Rj/AOo0HF/WI0rRwW3fWOq2uo1PtrNuT6tzm1GKt+T9h2bLK3Of6bcJ38x9Cz9J7/6Pe6Ld1W7GeeqViq4OaGgANkGql9ujH3N9mU7Iqb7voV/21oJJk8wkCPbhG+sRR+biXCNG7Jf/0vVUkkklKSSSSUpJJJJSkkkklKSSSSUpJJJJSkkkklKSSSSUpJJJJSkkkklP/9n/7RM8UGhvdG9zaG9wIDMuMAA4QklNBAQAAAAAAAccAgAAAnrqADhCSU0EJQAAAAAAEFTyhXT0N6T03a81HtVvzvI4QklNBC8AAAAAAEpVAAEASAAAAEgAAAAAAAAAAAAAANACAABAAgAAAAAAAAAAAAAYAwAAZAIAAAABwAMAALAEAAABAA8nAQA3AEMAawAuAGoAcABnADhCSU0D7QAAAAAAEABIAAAAAQACAEgAAAABAAI4QklNBCYAAAAAAA4AAAAAAAAAAAAAP4AAADhCSU0EDQAAAAAABAAAAB44QklNBBkAAAAAAAQAAAAeOEJJTQPzAAAAAAAJAAAAAAAAAAABADhCSU0ECgAAAAAAAQAAOEJJTScQAAAAAAAKAAEAAAAAAAAAAjhCSU0D9QAAAAAASAAvZmYAAQBsZmYABgAAAAAAAQAvZmYAAQChmZoABgAAAAAAAQAyAAAAAQBaAAAABgAAAAAAAQA1AAAAAQAtAAAABgAAAAAAAThCSU0D+AAAAAAAcAAA/////////////////////////////wPoAAAAAP////////////////////////////8D6AAAAAD/////////////////////////////A+gAAAAA/////////////////////////////wPoAAA4QklNBAAAAAAAAAIABjhCSU0EAgAAAAAAEAAAAAAAAAAAAAAAAAAAAAA4QklNBDAAAAAAAAgBAQEBAQEBAThCSU0ELQAAAAAADgADAAAABwAAAAYAAAAIOEJJTQQIAAAAAAAQAAAAAQAAAkAAAAJAAAAAADhCSU0EHgAAAAAABAAAAAA4QklNBBoAAAAAA0cAAAAGAAAAAAAAAAAAAACMAAABhgAAAAkAMgA5AGcAQgBNAGQANwBDAGsAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAYYAAACMAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAEAAAAAAABudWxsAAAAAgAAAAZib3VuZHNPYmpjAAAAAQAAAAAAAFJjdDEAAAAEAAAAAFRvcCBsb25nAAAAAAAAAABMZWZ0bG9uZwAAAAAAAAAAQnRvbWxvbmcAAACMAAAAAFJnaHRsb25nAAABhgAAAAZzbGljZXNWbExzAAAAAU9iamMAAAABAAAAAAAFc2xpY2UAAAASAAAAB3NsaWNlSURsb25nAAAAAAAA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Zi8xLjAvIiB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIgeGFwOkNyZWF0ZURhdGU9IjIwMTctMDEtMTlUMDA6MDM6MjArMDc6MDAiIHhhcDpNb2RpZnlEYXRlPSIyMDE3LTAxLTE5VDAwOjI5OjQyKzA3OjAwIiB4YXA6TWV0YWRhdGFEYXRlPSIyMDE3LTAxLTE5VDAwOjI5OjQyKzA3OjAwIiB4YXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzMgV2luZG93cyIgZGM6Zm9ybWF0PSJpbWFnZS9qcGVnIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SGlzdG9yeT0iIiB4YXBNTTpJbnN0YW5jZUlEPSJ1dWlkOjJFRDEyQUNEQTJEREU2MTFCNEFEQkVBQzU1OUQxOEE2IiB0aWZmOk9yaWVudGF0aW9uPSIxIiB0aWZmOlhSZXNvbHV0aW9uPSI3MjAwMDAvMTAwMDAiIHRpZmY6WVJlc29sdXRpb249IjcyMDAwMC8xMDAwMCIgdGlmZjpSZXNvbHV0aW9uVW5pdD0iMiIgdGlmZjpOYXRpdmVEaWdlc3Q9IjI1NiwyNTcsMjU4LDI1OSwyNjIsMjc0LDI3NywyODQsNTMwLDUzMSwyODIsMjgzLDI5NiwzMDEsMzE4LDMxOSw1MjksNTMyLDMwNiwyNzAsMjcxLDI3MiwzMDUsMzE1LDMzNDMyOzMwN0E0RDg5N0E5MkYyQURFMzI0NTE0NDVBMTE3MkQ1IiBleGlmOlBpeGVsWERpbWVuc2lvbj0iMzkwIiBleGlmOlBpeGVsWURpbWVuc2lvbj0iMTQwIiBleGlmOkNvbG9yU3BhY2U9Ii0xIiBleGlmOk5hdGl2ZURpZ2VzdD0iMzY4NjQsNDA5NjAsNDA5NjEsMzcxMjEsMzcxMjIsNDA5NjIsNDA5NjMsMzc1MTAsNDA5NjQsMzY4NjcsMzY4NjgsMzM0MzQsMzM0MzcsMzQ4NTAsMzQ4NTIsMzQ4NTUsMzQ4NTYsMzczNzcsMzczNzgsMzczNzksMzczODAsMzczODEsMzczODIsMzczODMsMzczODQsMzczODUsMzczODYsMzczOTYsNDE0ODMsNDE0ODQsNDE0ODYsNDE0ODcsNDE0ODgsNDE0OTIsNDE0OTMsNDE0OTUsNDE3MjgsNDE3MjksNDE3MzAsNDE5ODUsNDE5ODYsNDE5ODcsNDE5ODgsNDE5ODksNDE5OTAsNDE5OTEsNDE5OTIsNDE5OTMsNDE5OTQsNDE5OTUsNDE5OTYsNDIwMTYsMCwyLDQsNSw2LDcsOCw5LDEwLDExLDEyLDEzLDE0LDE1LDE2LDE3LDE4LDIwLDIyLDIzLDI0LDI1LDI2LDI3LDI4LDMwOzFFRjg2NkIxQzAzMUUyRUI5Q0Q2OUI0MkE3ODU1RDMxIi8+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD94cGFja2V0IGVuZD0idyI/Pv/uACFBZG9iZQBkAAAAAAEDABADAgMGAAAAAAAAAAAAAAAA/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMAQcHBw0MDRgQEBgUDg4OFBQODg4OFBEMDAwMDBERDAwMDAwMEQwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wgARCACMAYYDAREAAhEBAxEB/8QA/QABAAIDAQEBAAAAAAAAAAAAAAUGAwQHAgEIAQEAAwEBAQEAAAAAAAAAAAAAAgMEBQEGBxAAAAYBAgUBBQYGAwAAAAAAAQIDBAUGABEHECASMhNQFBY2NwhAITE0FTUwYHAiIzMkFzgRAAICAQIDBAQHCgwDCQAAAAIDAQQFERIAIhMhMkIGMWIjFBBBUWFSctJxgpKyM6MkdBU2IFCBkaHBwkNTY7MWojQHQGBw4nOTZIS0EgABAwICBQUN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"></th>

  </div>

<p>
  <!-- <div style="position: absolute;top: 10px; left: 265px; ">THIS IS MY FOOTER</div> -->

  <div id="outtable">
    <table>
      <thead>
        <tr>
          <th class="normal">No</th>
          <th class="normal">Judul Keluhan</th>
          <th class="normal">Nama Pelapor</th>
          <th class="normal">Kategori</th>
          <th class="normal">Tanggal</th>
          <th class="normal">Status</th>
        </tr>

      </thead>
      <tbody>
        <?php if (!$hasil) { ?>
          <tr><td colspan="7">Tidak ada data</td></tr>
        <?php } else { $no=1; foreach ($hasil as $u) {
        if ($u->laporan_status == 1)
           $status = "<span class='label label-primary'>Pending</span>";
           else if ($u->laporan_status == 2)
           $status = "<span class='label label-success'>Proses</span>";
           else if ($u->laporan_status == 3)
           $status = "<span class='label label-danger'>Selesai</span>";
           else
           $status = "NULL"; ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $u->judul_keluhan ?></td>
            <td><?php echo $u->nama_pengguna ?></td>
            <td><?php echo $u->nama_kategori ?></td>
            <td><?php echo date("d-M-y", strtotime($u->waktu)); ?></td>
            <td><?php echo $status ?></td>
            
          </tr>

        <?php $no++; }} ?>
      </tbody>
    </table>
   </div>
 </p>
</tr>

</div>
</center>
</body>
  </div>
<script type="text/javascript">
        function cetak() {
            print();
        }
</script>
</html>
<meta http-equiv="refresh" content="3; <?php echo site_url('kepalaphh/cetak_laporan_keluhan'); ?>">