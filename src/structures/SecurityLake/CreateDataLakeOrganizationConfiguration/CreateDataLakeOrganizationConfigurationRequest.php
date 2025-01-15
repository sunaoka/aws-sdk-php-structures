<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLakeOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DataLakeAutoEnableNewAccountConfiguration>|null $autoEnableNewAccount
 */
class CreateDataLakeOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{autoEnableNewAccount?: list<Shapes\DataLakeAutoEnableNewAccountConfiguration>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
