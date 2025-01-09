<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $applicationID
 * @property string $description
 * @property string $name
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     applicationID: string,
     *     description?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
