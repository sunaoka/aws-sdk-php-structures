<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $name
 * @property string $spec
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     name: string,
     *     spec?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
