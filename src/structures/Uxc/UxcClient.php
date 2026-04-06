<?php

namespace Sunaoka\Aws\Structures\Uxc;

class UxcClient extends \Aws\Uxc\UxcClient
{
    use GetAccountCustomizations\GetAccountCustomizationsTrait;
    use ListServices\ListServicesTrait;
    use UpdateAccountCustomizations\UpdateAccountCustomizationsTrait;
}
