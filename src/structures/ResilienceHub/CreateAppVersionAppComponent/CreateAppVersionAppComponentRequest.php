<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateAppVersionAppComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>>|null $additionalInfo
 * @property string $appArn
 * @property string|null $clientToken
 * @property string|null $id
 * @property string $name
 * @property string $type
 */
class CreateAppVersionAppComponentRequest extends Request
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>|null,
     *     appArn: string,
     *     clientToken?: string|null,
     *     id?: string|null,
     *     name: string,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
