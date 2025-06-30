<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIdentityPropagationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'REDSHIFT'|'QBUSINESS'|'ATHENA' $Service
 * @property list<string>|null $AuthorizedTargets
 */
class UpdateIdentityPropagationConfigRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Service: 'REDSHIFT'|'QBUSINESS'|'ATHENA',
     *     AuthorizedTargets?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
