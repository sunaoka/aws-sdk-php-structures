<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateResourceSnapshotJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $EngagementIdentifier
 * @property 'Opportunity' $ResourceType
 * @property string $ResourceIdentifier
 * @property string $ResourceSnapshotTemplateIdentifier
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateResourceSnapshotJobRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     EngagementIdentifier: string,
     *     ResourceType: 'Opportunity',
     *     ResourceIdentifier: string,
     *     ResourceSnapshotTemplateIdentifier: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
