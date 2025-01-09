<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateResourceSnapshotJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $EngagementIdentifier
 * @property string $ResourceIdentifier
 * @property string $ResourceSnapshotTemplateIdentifier
 * @property 'Opportunity' $ResourceType
 */
class CreateResourceSnapshotJobRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     EngagementIdentifier: string,
     *     ResourceIdentifier: string,
     *     ResourceSnapshotTemplateIdentifier: string,
     *     ResourceType: 'Opportunity'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
