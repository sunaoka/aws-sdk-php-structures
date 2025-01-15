<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateDeletionProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $clientToken
 * @property bool $deletionProtected
 */
class UpdateDeletionProtectionRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     clientToken?: string|null,
     *     deletionProtected: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
