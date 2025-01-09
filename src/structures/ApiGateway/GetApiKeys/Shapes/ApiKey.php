<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetApiKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $value
 * @property string $name
 * @property string $customerId
 * @property string $description
 * @property bool $enabled
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property list<string> $stageKeys
 * @property array<string, string> $tags
 */
class ApiKey extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     value?: string,
     *     name?: string,
     *     customerId?: string,
     *     description?: string,
     *     enabled?: bool,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     stageKeys?: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
