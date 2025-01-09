<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationName
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $Description
 * @property string $DataFilter
 * @property string $KmsKeyId
 * @property array<string, string> $AdditionalEncryptionContext
 * @property list<Shapes\Tag> $Tags
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     IntegrationName: string,
     *     SourceArn: string,
     *     TargetArn: string,
     *     Description?: string,
     *     DataFilter?: string,
     *     KmsKeyId?: string,
     *     AdditionalEncryptionContext?: array<string, string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
