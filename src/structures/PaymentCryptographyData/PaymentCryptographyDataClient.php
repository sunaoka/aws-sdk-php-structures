<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData;

class PaymentCryptographyDataClient extends \Aws\PaymentCryptographyData\PaymentCryptographyDataClient
{
    use DecryptData\DecryptDataTrait;
    use EncryptData\EncryptDataTrait;
    use GenerateAs2805KekValidation\GenerateAs2805KekValidationTrait;
    use GenerateCardValidationData\GenerateCardValidationDataTrait;
    use GenerateMac\GenerateMacTrait;
    use GenerateMacEmvPinChange\GenerateMacEmvPinChangeTrait;
    use GeneratePinData\GeneratePinDataTrait;
    use ReEncryptData\ReEncryptDataTrait;
    use TranslateKeyMaterial\TranslateKeyMaterialTrait;
    use TranslatePinData\TranslatePinDataTrait;
    use VerifyAuthRequestCryptogram\VerifyAuthRequestCryptogramTrait;
    use VerifyCardValidationData\VerifyCardValidationDataTrait;
    use VerifyMac\VerifyMacTrait;
    use VerifyPinData\VerifyPinDataTrait;
}
