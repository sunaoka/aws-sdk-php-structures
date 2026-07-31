<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $codeConnectionArn
 * @property string $repositoryId
 * @property string $defaultBranch
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null $status
 * @property string|null $errorMessage
 */
class GitPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     codeConnectionArn: string,
     *     repositoryId: string,
     *     defaultBranch: string,
     *     status?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
