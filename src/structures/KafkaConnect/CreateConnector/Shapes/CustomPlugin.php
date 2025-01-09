<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customPluginArn
 * @property int<1, 9223372036854775807> $revision
 */
class CustomPlugin extends Shape
{
    /**
     * @param array{
     *     customPluginArn: string,
     *     revision: int<1, 9223372036854775807>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
