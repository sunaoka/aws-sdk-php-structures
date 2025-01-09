<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ApplySchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PublishedSchemaArn
 * @property string $DirectoryArn
 */
class ApplySchemaRequest extends Request
{
    /**
     * @param array{
     *     PublishedSchemaArn: string,
     *     DirectoryArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
