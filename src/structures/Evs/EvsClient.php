<?php

namespace Sunaoka\Aws\Structures\Evs;

class EvsClient extends \Aws\Evs\EvsClient
{
    use AssociateEipToVlan\AssociateEipToVlanTrait;
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreateEnvironmentHost\CreateEnvironmentHostTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeleteEnvironmentHost\DeleteEnvironmentHostTrait;
    use DisassociateEipFromVlan\DisassociateEipFromVlanTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use ListEnvironmentHosts\ListEnvironmentHostsTrait;
    use ListEnvironmentVlans\ListEnvironmentVlansTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
