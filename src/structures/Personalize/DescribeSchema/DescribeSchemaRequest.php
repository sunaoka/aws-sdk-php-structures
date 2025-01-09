<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $schemaArn
 */
class DescribeSchemaRequest extends Request
{
    /**
     * @param array{schemaArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
