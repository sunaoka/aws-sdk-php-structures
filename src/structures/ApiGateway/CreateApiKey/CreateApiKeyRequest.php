<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $enabled
 * @property bool|null $generateDistinctId
 * @property string|null $value
 * @property list<Shapes\StageKey>|null $stageKeys
 * @property string|null $customerId
 * @property array<string, string>|null $tags
 */
class CreateApiKeyRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     enabled?: bool|null,
     *     generateDistinctId?: bool|null,
     *     value?: string|null,
     *     stageKeys?: list<Shapes\StageKey>|null,
     *     customerId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
