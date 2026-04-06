<?php

namespace Sunaoka\Aws\Structures\Rds\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationName
 * @property string|null $KMSKeyId
 * @property array<string, string>|null $AdditionalEncryptionContext
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $DataFilter
 * @property string|null $Description
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     SourceArn: string,
     *     TargetArn: string,
     *     IntegrationName: string,
     *     KMSKeyId?: string|null,
     *     AdditionalEncryptionContext?: array<string, string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DataFilter?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
