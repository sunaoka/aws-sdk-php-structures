<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationID
 * @property string|null $name
 * @property string|null $description
 * @property string|null $accountID
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationID: string,
     *     name?: string|null,
     *     description?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
