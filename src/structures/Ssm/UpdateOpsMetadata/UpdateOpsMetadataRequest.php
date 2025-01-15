<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsMetadataArn
 * @property array<string, Shapes\MetadataValue>|null $MetadataToUpdate
 * @property list<string>|null $KeysToDelete
 */
class UpdateOpsMetadataRequest extends Request
{
    /**
     * @param array{
     *     OpsMetadataArn: string,
     *     MetadataToUpdate?: array<string, Shapes\MetadataValue>|null,
     *     KeysToDelete?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
