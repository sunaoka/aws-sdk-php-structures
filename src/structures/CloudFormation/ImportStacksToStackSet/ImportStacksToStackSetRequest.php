<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ImportStacksToStackSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property list<string> $StackIds
 * @property string $StackIdsUrl
 * @property list<string> $OrganizationalUnitIds
 * @property Shapes\StackSetOperationPreferences $OperationPreferences
 * @property string $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class ImportStacksToStackSetRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     StackIds?: list<string>,
     *     StackIdsUrl?: string,
     *     OrganizationalUnitIds?: list<string>,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences,
     *     OperationId?: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
