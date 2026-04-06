<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $applicationID
 * @property string|null $description
 * @property string|null $name
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     applicationID: string,
     *     description?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
