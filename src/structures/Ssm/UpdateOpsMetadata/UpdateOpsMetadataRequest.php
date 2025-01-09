<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsMetadataArn
 * @property array<string, Shapes\MetadataValue> $MetadataToUpdate
 * @property list<string> $KeysToDelete
 */
class UpdateOpsMetadataRequest extends Request
{
    /**
     * @param array{
     *     OpsMetadataArn: string,
     *     MetadataToUpdate?: array<string, Shapes\MetadataValue>,
     *     KeysToDelete?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
