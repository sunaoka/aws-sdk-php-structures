<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customPluginArn
 * @property int $revision
 */
class CustomPlugin extends Shape
{
    /**
     * @param array{
     *     customPluginArn: string,
     *     revision: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
