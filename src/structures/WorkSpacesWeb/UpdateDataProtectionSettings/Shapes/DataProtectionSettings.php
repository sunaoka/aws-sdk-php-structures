<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataProtectionSettingsArn
 * @property InlineRedactionConfiguration|null $inlineRedactionConfiguration
 * @property list<string>|null $associatedPortalArns
 * @property string|null $displayName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 */
class DataProtectionSettings extends Shape
{
    /**
     * @param array{
     *     dataProtectionSettingsArn: string,
     *     inlineRedactionConfiguration?: InlineRedactionConfiguration|null,
     *     associatedPortalArns?: list<string>|null,
     *     displayName?: string|null,
     *     description?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
