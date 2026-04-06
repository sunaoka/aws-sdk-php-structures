<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 * @property string|null $roleArn
 * @property string|null $identityCenterInstanceArn
 * @property string|null $description
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 * @property Shapes\AttachmentsConfiguration|null $attachmentsConfiguration
 * @property Shapes\QAppsConfiguration|null $qAppsConfiguration
 * @property Shapes\PersonalizationConfiguration|null $personalizationConfiguration
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     displayName: string,
     *     roleArn?: string|null,
     *     identityCenterInstanceArn?: string|null,
     *     description?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null,
     *     attachmentsConfiguration?: Shapes\AttachmentsConfiguration|null,
     *     qAppsConfiguration?: Shapes\QAppsConfiguration|null,
     *     personalizationConfiguration?: Shapes\PersonalizationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
