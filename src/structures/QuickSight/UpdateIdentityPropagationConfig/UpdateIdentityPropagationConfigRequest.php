<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIdentityPropagationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'REDSHIFT'|'QBUSINESS' $Service
 * @property list<string> $AuthorizedTargets
 */
class UpdateIdentityPropagationConfigRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Service: 'REDSHIFT'|'QBUSINESS',
     *     AuthorizedTargets?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
