<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property array<string, Shapes\MetadataValue>|null $Metadata
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateOpsMetadataRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     Metadata?: array<string, Shapes\MetadataValue>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
