<?php

namespace Sunaoka\Aws\Structures\SimpleDBv2;

class SimpleDBv2Client extends \Aws\SimpleDBv2\SimpleDBv2Client
{
    use GetExport\GetExportTrait;
    use ListExports\ListExportsTrait;
    use StartDomainExport\StartDomainExportTrait;
}
