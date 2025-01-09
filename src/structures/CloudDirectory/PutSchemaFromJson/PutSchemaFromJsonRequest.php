<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\PutSchemaFromJson;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $Document
 */
class PutSchemaFromJsonRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     Document: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
