<?php

namespace Sunaoka\Aws\Structures\AppRegistry\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string $name
 * @property string $description
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     name?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
