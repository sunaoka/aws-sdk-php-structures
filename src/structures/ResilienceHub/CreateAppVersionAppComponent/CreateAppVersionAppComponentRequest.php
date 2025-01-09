<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateAppVersionAppComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>> $additionalInfo
 * @property string $appArn
 * @property string $clientToken
 * @property string $id
 * @property string $name
 * @property string $type
 */
class CreateAppVersionAppComponentRequest extends Request
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>,
     *     appArn: string,
     *     clientToken?: string,
     *     id?: string,
     *     name: string,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
