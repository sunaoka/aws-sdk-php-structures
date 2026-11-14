<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListRuntimes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string|null $Description
 * @property string|null $LicenseInfo
 * @property RuntimeReleaseLifecycle|null $ReleaseLifecycle
 * @property 'ACTIVE'|'PENDING_DELETION'|'DELETING'|'FAILED'|null $State
 * @property string|null $PendingDeletionAt
 * @property string $Created
 * @property string $LastModified
 */
class RuntimeInfo extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     Description?: string|null,
     *     LicenseInfo?: string|null,
     *     ReleaseLifecycle?: RuntimeReleaseLifecycle|null,
     *     State?: 'ACTIVE'|'PENDING_DELETION'|'DELETING'|'FAILED'|null,
     *     PendingDeletionAt?: string|null,
     *     Created: string,
     *     LastModified: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
