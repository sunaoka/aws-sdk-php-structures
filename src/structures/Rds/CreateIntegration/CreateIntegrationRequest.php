<?php

namespace Sunaoka\Aws\Structures\Rds\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationName
 * @property string $KMSKeyId
 * @property array<string, string> $AdditionalEncryptionContext
 * @property list<Shapes\Tag> $Tags
 * @property string $DataFilter
 * @property string $Description
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     SourceArn: string,
     *     TargetArn: string,
     *     IntegrationName: string,
     *     KMSKeyId?: string,
     *     AdditionalEncryptionContext?: array<string, string>,
     *     Tags?: list<Shapes\Tag>,
     *     DataFilter?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
