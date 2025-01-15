<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ImportStacksToStackSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property list<string>|null $StackIds
 * @property string|null $StackIdsUrl
 * @property list<string>|null $OrganizationalUnitIds
 * @property Shapes\StackSetOperationPreferences|null $OperationPreferences
 * @property string|null $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class ImportStacksToStackSetRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     StackIds?: list<string>|null,
     *     StackIdsUrl?: string|null,
     *     OrganizationalUnitIds?: list<string>|null,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences|null,
     *     OperationId?: string|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
