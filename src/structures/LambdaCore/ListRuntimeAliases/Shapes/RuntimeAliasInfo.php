<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListRuntimeAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $RuntimeVersion
 * @property string $RuntimeVersionArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'PENDING_DELETION' $State
 * @property string|null $PendingDeletionAt
 * @property string|null $Description
 * @property Compatibility|null $Compatibility
 * @property RuntimeReleaseLifecycle|null $ReleaseLifecycle
 * @property string $Created
 * @property string $LastModified
 */
class RuntimeAliasInfo extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     RuntimeVersion: string,
     *     RuntimeVersionArn: string,
     *     State: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'PENDING_DELETION',
     *     PendingDeletionAt?: string|null,
     *     Description?: string|null,
     *     Compatibility?: Compatibility|null,
     *     ReleaseLifecycle?: RuntimeReleaseLifecycle|null,
     *     Created: string,
     *     LastModified: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
