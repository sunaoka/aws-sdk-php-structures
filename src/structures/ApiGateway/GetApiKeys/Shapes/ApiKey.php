<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetApiKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $value
 * @property string|null $name
 * @property string|null $customerId
 * @property string|null $description
 * @property bool|null $enabled
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property list<string>|null $stageKeys
 * @property array<string, string>|null $tags
 */
class ApiKey extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     value?: string|null,
     *     name?: string|null,
     *     customerId?: string|null,
     *     description?: string|null,
     *     enabled?: bool|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     stageKeys?: list<string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
