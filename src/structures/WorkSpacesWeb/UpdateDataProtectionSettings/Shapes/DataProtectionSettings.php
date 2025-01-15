<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property list<string>|null $associatedPortalArns
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $customerManagedKey
 * @property string $dataProtectionSettingsArn
 * @property string|null $description
 * @property string|null $displayName
 * @property InlineRedactionConfiguration|null $inlineRedactionConfiguration
 */
class DataProtectionSettings extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     associatedPortalArns?: list<string>|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     customerManagedKey?: string|null,
     *     dataProtectionSettingsArn: string,
     *     description?: string|null,
     *     displayName?: string|null,
     *     inlineRedactionConfiguration?: InlineRedactionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
