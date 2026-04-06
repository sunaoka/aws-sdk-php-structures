<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationName
 * @property string|null $KMSKeyId
 * @property list<Shapes\Tag>|null $TagList
 * @property array<string, string>|null $AdditionalEncryptionContext
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
     *     TagList?: list<Shapes\Tag>|null,
     *     AdditionalEncryptionContext?: array<string, string>|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
