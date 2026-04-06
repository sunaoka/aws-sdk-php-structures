<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $applicationID
 */
class ArchiveApplicationRequest extends Request
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
