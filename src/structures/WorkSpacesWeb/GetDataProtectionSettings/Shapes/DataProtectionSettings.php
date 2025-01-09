<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property list<string> $associatedPortalArns
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $customerManagedKey
 * @property string $dataProtectionSettingsArn
 * @property string $description
 * @property string $displayName
 * @property InlineRedactionConfiguration $inlineRedactionConfiguration
 */
class DataProtectionSettings extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     associatedPortalArns?: list<string>,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     customerManagedKey?: string,
     *     dataProtectionSettingsArn: string,
     *     description?: string,
     *     displayName?: string,
     *     inlineRedactionConfiguration?: InlineRedactionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
