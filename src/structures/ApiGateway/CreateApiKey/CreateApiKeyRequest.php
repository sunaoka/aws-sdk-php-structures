<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property bool $enabled
 * @property bool $generateDistinctId
 * @property string $value
 * @property list<Shapes\StageKey> $stageKeys
 * @property string $customerId
 * @property array<string, string> $tags
 */
class CreateApiKeyRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     enabled?: bool,
     *     generateDistinctId?: bool,
     *     value?: string,
     *     stageKeys?: list<Shapes\StageKey>,
     *     customerId?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
