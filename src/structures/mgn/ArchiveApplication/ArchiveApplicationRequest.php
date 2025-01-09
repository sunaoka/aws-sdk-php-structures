<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $applicationID
 */
class ArchiveApplicationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     applicationID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
