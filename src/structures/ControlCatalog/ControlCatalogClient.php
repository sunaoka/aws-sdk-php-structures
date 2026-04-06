<?php

namespace Sunaoka\Aws\Structures\ControlCatalog;

class ControlCatalogClient extends \Aws\ControlCatalog\ControlCatalogClient
{
    use GetControl\GetControlTrait;
    use ListCommonControls\ListCommonControlsTrait;
    use ListControls\ListControlsTrait;
    use ListDomains\ListDomainsTrait;
    use ListObjectives\ListObjectivesTrait;
}
