<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateResourceSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EngagementIdentifier
 * @property 'Opportunity' $ResourceType
 * @property string $ResourceIdentifier
 * @property string $ResourceSnapshotTemplateIdentifier
 * @property string $ClientToken
 */
class CreateResourceSnapshotRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier: string,
     *     ResourceType: 'Opportunity',
     *     ResourceIdentifier: string,
     *     ResourceSnapshotTemplateIdentifier: string,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
