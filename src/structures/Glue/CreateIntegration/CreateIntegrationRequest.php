<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationName
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string|null $Description
 * @property string|null $DataFilter
 * @property string|null $KmsKeyId
 * @property array<string, string>|null $AdditionalEncryptionContext
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     IntegrationName: string,
     *     SourceArn: string,
     *     TargetArn: string,
     *     Description?: string|null,
     *     DataFilter?: string|null,
     *     KmsKeyId?: string|null,
     *     AdditionalEncryptionContext?: array<string, string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
