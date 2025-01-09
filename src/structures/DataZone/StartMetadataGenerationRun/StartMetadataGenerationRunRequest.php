<?php

namespace Sunaoka\Aws\Structures\DataZone\StartMetadataGenerationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $owningProjectIdentifier
 * @property Shapes\MetadataGenerationRunTarget $target
 * @property 'BUSINESS_DESCRIPTIONS' $type
 */
class StartMetadataGenerationRunRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     domainIdentifier: string,
     *     owningProjectIdentifier: string,
     *     target: Shapes\MetadataGenerationRunTarget,
     *     type: 'BUSINESS_DESCRIPTIONS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
