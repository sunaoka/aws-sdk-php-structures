<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $name
 * @property string|null $spec
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     name: string,
     *     spec?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
