<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property array<string, Shapes\MetadataValue> $Metadata
 * @property list<Shapes\Tag> $Tags
 */
class CreateOpsMetadataRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     Metadata?: array<string, Shapes\MetadataValue>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
