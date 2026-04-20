<?php

namespace Sunaoka\Aws\Structures\Evs;

class EvsClient extends \Aws\Evs\EvsClient
{
    use AssociateEipToVlan\AssociateEipToVlanTrait;
    use CreateEntitlement\CreateEntitlementTrait;
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreateEnvironmentConnector\CreateEnvironmentConnectorTrait;
    use CreateEnvironmentHost\CreateEnvironmentHostTrait;
    use DeleteEntitlement\DeleteEntitlementTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeleteEnvironmentConnector\DeleteEnvironmentConnectorTrait;
    use DeleteEnvironmentHost\DeleteEnvironmentHostTrait;
    use DisassociateEipFromVlan\DisassociateEipFromVlanTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use GetVersions\GetVersionsTrait;
    use ListEnvironmentConnectors\ListEnvironmentConnectorsTrait;
    use ListEnvironmentHosts\ListEnvironmentHostsTrait;
    use ListEnvironmentVlans\ListEnvironmentVlansTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVmEntitlements\ListVmEntitlementsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEnvironmentConnector\UpdateEnvironmentConnectorTrait;
}
