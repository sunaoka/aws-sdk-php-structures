<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersionAppComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>>|null $additionalInfo
 * @property string $appArn
 * @property string $id
 * @property string|null $name
 * @property string|null $type
 */
class UpdateAppVersionAppComponentRequest extends Request
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>|null,
     *     appArn: string,
     *     id: string,
     *     name?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
