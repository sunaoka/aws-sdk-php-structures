<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLakeOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DataLakeAutoEnableNewAccountConfiguration> $autoEnableNewAccount
 */
class CreateDataLakeOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{autoEnableNewAccount?: list<Shapes\DataLakeAutoEnableNewAccountConfiguration>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
