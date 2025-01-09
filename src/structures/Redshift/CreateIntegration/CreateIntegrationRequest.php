<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationName
 * @property string $KMSKeyId
 * @property list<Shapes\Tag> $TagList
 * @property array<string, string> $AdditionalEncryptionContext
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
     *     TagList?: list<Shapes\Tag>,
     *     AdditionalEncryptionContext?: array<string, string>,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
