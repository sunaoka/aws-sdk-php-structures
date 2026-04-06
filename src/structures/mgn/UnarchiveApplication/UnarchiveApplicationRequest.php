<?php

namespace Sunaoka\Aws\Structures\mgn\UnarchiveApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $applicationID
 */
class UnarchiveApplicationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     applicationID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
