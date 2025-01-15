<?php

namespace Sunaoka\Aws\Structures\AppRegistry\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string|null $name
 * @property string|null $description
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
