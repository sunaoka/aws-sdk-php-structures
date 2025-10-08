<?php

namespace Sunaoka\Aws\Structures\ControlCatalog;

class ControlCatalogClient extends \Aws\ControlCatalog\ControlCatalogClient
{
    use GetControl\GetControlTrait;
    use ListCommonControls\ListCommonControlsTrait;
    use ListControlMappings\ListControlMappingsTrait;
    use ListControls\ListControlsTrait;
    use ListDomains\ListDomainsTrait;
    use ListObjectives\ListObjectivesTrait;
}
