<?php

namespace Sunaoka\Aws\Structures\SsmSap\StartConfigurationChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property list<'SAP_CHECK_01'|'SAP_CHECK_02'|'SAP_CHECK_03'>|null $ConfigurationCheckIds
 */
class StartConfigurationChecksRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationCheckIds?: list<'SAP_CHECK_01'|'SAP_CHECK_02'|'SAP_CHECK_03'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
