<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property Shapes\SchemaVersionNumber $SchemaVersionNumber
 * @property 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL' $Compatibility
 * @property string $Description
 */
class UpdateSchemaRequest extends Request
{
    /**
     * @param array{
     *     SchemaId: Shapes\SchemaId,
     *     SchemaVersionNumber?: Shapes\SchemaVersionNumber,
     *     Compatibility?: 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
