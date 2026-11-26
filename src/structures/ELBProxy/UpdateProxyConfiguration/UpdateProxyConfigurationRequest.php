<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 * @property Shapes\ConfigurationFile|null $configurationFile
 * @property Shapes\ConfigurationArchive|null $configurationArchive
 * @property bool|null $resetConfigurationArchive
 * @property string|null $customerKmsKeyArn
 * @property bool|null $resetCustomerKmsKeyArn
 */
class UpdateProxyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     proxyIdentifier: string,
     *     configurationFile?: Shapes\ConfigurationFile|null,
     *     configurationArchive?: Shapes\ConfigurationArchive|null,
     *     resetConfigurationArchive?: bool|null,
     *     customerKmsKeyArn?: string|null,
     *     resetCustomerKmsKeyArn?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
