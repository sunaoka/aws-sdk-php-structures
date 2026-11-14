<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListRuntimeVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $ResolvedUri
 * @property 'CREATING'|'ACTIVE'|'FAILED'|'DELETING'|'PENDING_DELETION' $State
 * @property string|null $PendingDeletionAt
 * @property string|null $ReleaseNotes
 * @property Compatibility|null $Compatibility
 * @property string $Created
 * @property string $LastModified
 */
class RuntimeVersionInfo extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     ResolvedUri: string,
     *     State: 'CREATING'|'ACTIVE'|'FAILED'|'DELETING'|'PENDING_DELETION',
     *     PendingDeletionAt?: string|null,
     *     ReleaseNotes?: string|null,
     *     Compatibility?: Compatibility|null,
     *     Created: string,
     *     LastModified: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
